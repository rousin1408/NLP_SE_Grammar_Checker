from flask import Flask, request

import language_tool_python
app = Flask(__name__)
@app.route('/spelling', methods=['POST'])
def spelling():
    if request.is_json:
        data = request.get_json()

        typo = data["sentence"]
        tool = language_tool_python.LanguageToolPublicAPI('en-US')
        final = tool.correct(typo)
        return final

    return {"error": "Request must be JSON"}, 415
# -OJj^AH\ZD^3NybD