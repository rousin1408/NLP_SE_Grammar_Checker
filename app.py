# coba.py
from flask import Flask, request, jsonify
from spellchecker import SpellChecker

app = Flask(__name__)

@app.route('/spell', methods=['POST'])
def spelling():
    if request.is_json:
        data = request.get_json()
        spell = SpellChecker()
        typo = data["sentence"]
        typo1 = typo.split(" ")
        misspelled_word = spell.unknown(typo1)
        
        text = ""
        
        hasil = ""
        arr = []

        for word in typo1:
            if (len(text) == 0) :
                text = text + spell.correction(word)
            else :
                text = text + " " + spell.correction(word)
        hasil = text

        for word in misspelled_word:
            arr.append({word: list(spell.candidates(word))})
        return { 'text': hasil, 'misspell': arr }
    return {"error": "Request must be JSON"}, 415