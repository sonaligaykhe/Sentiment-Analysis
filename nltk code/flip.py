import bs4 as bs
import webbrowser
import urlopen 
import urllib.request
import requests
from bs4 import BeautifulSoup,NavigableString, Tag
import xlwt
from lxml import etree

path="https://www.flipkart.com/redmi-note-4-black-64-gb/product-reviews/itmeqe48766xqzb7?pid=MOBEQ98TABTWXGTD"
web = requests.get(path).text
#print(web)
ws=BeautifulSoup(web,'lxml')

oururl=opener.open(path).read()
soup=BeautifulSoup(oururl)
soup=soup.find('div')
soup=str(soup)
print(soup)

'''
a=ws.find('div')
b=a.find('div',class_='_1SFrA2')
print(b)
for r in ws.find_all('div'):
    for p in r.find_all('div',class_='qwjRop'):
        print(p)
#res1=soup.find_all('div',class_='qwjRop')
#print(res1.text)

#print(soup.find_all('div').text)
while True:
    web = requests.get(path).text
    ws=BeautifulSoup(web,'lxml')            
    res1=ws.find_all('div')
    if(res1!=None):
        if(len(res1)>0):
            break
    #print(len(res1))
    print("chalu ahe ")


res1=res1[0]
#print(res1.text)
'''
