import language_tool_python
tool = language_tool_python.LanguageTool('en-US')

text = input("Insert your sentence: ")
final = tool.correct(text)
print(final)