# coba.py
from flask import Flask, request, jsonify
from gingerit.gingerit import GingerIt
# cloudscraper


app = Flask(__name__)

@app.route('/spelling', methods=['POST'])
def spelling():
    if request.is_json:
        data = request.get_json()
        spell = GingerIt()
        typo = data["sentence"]
        final = spell.parse(typo)
        return final['result']
    return {"error": "Request must be JSON"}, 415