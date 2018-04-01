from itertools import chain
from glob import glob

file = open('allwords.txt', 'r')

lines = [line.lower() for line in file]
with open('newallwords.txt', 'w') as out:
     out.writelines(sorted(lines))
