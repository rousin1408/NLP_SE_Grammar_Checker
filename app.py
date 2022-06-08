# coba.py
from flask import Flask, request, jsonify
from spellchecker import SpellChecker
import language_tool_python


app = Flask(__name__)

@app.route('/spelling', methods=['POST'])
def spelling():
    if request.is_json:
        data = request.get_json()
        spell = SpellChecker()
        typo = data["sentence"]
        tool = language_tool_python.LanguageTool('en-US')
        final = tool.correct(typo)
        return final
    return {"error": "Request must be JSON"}, 415