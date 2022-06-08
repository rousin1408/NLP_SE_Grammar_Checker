from textblob import Word
def correct_word_spelling(word):
    
    word = Word(word)
    
    result = word.correct()
    
    print(result)