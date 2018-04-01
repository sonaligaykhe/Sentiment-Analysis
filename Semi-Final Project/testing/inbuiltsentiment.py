from nltk.corpus import wordnet

synsarray = wordnet.synsets("sad")


print(synsarray)
#print(synsarray.length())
print(synsarray[0].name())
print(synsarray[0].lemmas()[0].name())



s = "sad"

synonymslist = []

for synarray in wordnet.synsets(s):
    for l in synarray.lemmas():
       # print("similar words  : ", l)
        synonymslist.append(l.name())

  
print("list : ")
print(synonymslist)
