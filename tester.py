from spellchecker import SpellChecker

spell = SpellChecker()
typo = input("Insert sentence : ")
typo1 = typo.split(" ")
text = ""
misspelled_word = spell.unknown(typo1)

for word in typo1:
    if (len(text) == 0) :
        text = text + spell.correction(word)
    else :
        text = text + " " + spell.correction(word)
print(text)

for word in misspelled_word:
    print(word, " ", spell.candidates(word))