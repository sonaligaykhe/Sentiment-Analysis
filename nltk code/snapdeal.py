import bs4 as bs 
import urllib.request
import requests
from bs4 import BeautifulSoup
import xlwt
from string import ascii_lowercase





def get_review(url,sheet,wb):
    
    sheet = wb.add_sheet(sheet)
    web = requests.get(url).text
    ws=BeautifulSoup(web,'lxml')

    while True:
        web = requests.get(url).text
        ws=BeautifulSoup(web,'lxml')            
        x=ws.findAll('div',class_='col-xs-22')
        if(x!=None):
            if(len(x)>0):
                break
    mob_name=x[0].text
    #print(mob_name)

    while True:
        web = requests.get(url).text
        ws=BeautifulSoup(web,'lxml')            
        x=ws.findAll('div',class_='col-xs-22')
        if(x!=None):
            if(len(x)>0):
                break
    mob_size=((((x[0].text).split(' '))[6].split('('))[1].split(','))[0]
    #print(mob_size)
    
    while True:
        web = requests.get(url).text
        ws=BeautifulSoup(web,'lxml')            
        x=ws.findAll('span',class_='payBlkBig')
        if(x!=None):
            if(len(x)>0):
                break
    mob_price=x[0].text
    #print(mob_price)
    
    while True:
        web = requests.get(url).text
        ws=BeautifulSoup(web,'lxml')            
        x=ws.findAll('span',class_='avrg-rating')
        if(x!=None):
            if(len(x)>0):
                break
    mob_star=(x[0]).text.split('(')[1].split(')')[0]
    '''mob_star=mob_star[0]'''
    #print(mob_star)
    '''    
    print(mob_name)
    print(mob_size)
    print(mob_price)
    print(mob_star)
    '''
    #print(ws.prettify())



    print(sheet)
    sheet.write(0,0,mob_name)
    sheet.write(0,1,mob_size)
    sheet.write(0,2,mob_price)
    sheet.write(0,3,mob_star)




        #####################################################################################


    res1=ws.findAll('div',class_='user-review')
    print(res1)
    while True:
        web = requests.get(url).text
        ws=BeautifulSoup(web,'lxml')            
        res1=ws.findAll('div',class_='user-review')
        if(res1!=None):
            if(len(res1)>0):
                break
    res1=res1[0]
    
    #reviews=list(map(lambda x:x.text,res1.find_all('p')))
    reviews=res1.find_all('div',class_='head').text
    print(reviews)

        #rev_src=res1.find('div',class_='a-row review-data').find('a',class_='a-link-emphasis a-text-bold')
        #print(rev_src.get('href'))
    '''
    i=1
    j=0
    while(j<10):
        reviews=list(map(lambda x:x.text,res1.find_all('p')))
        print(reviews)
        for t1 in reviews:
            sheet.write(i,0,t1)
            print(t1)
            i+=1
    
        
        for l1 in ws.find_all('div',class_='_2kUstJ'):
            flag=False
            for l2 in l1.find_all('a'):
                print(l2.get('href'))
                url="https://www.flipkart.com"+l2.get('href')
                web = requests.get(url).text
                ws=BeautifulSoup(web,'lxml')
                flag=True
                break
            if flag==True:
                break
                  
        res1=ws.findAll('div',class_='commentreview')
        while True:
            web = requests.get(url).text
            ws=BeautifulSoup(web,'lxml')            
            res1=ws.findAll('div',class_='commentreview')
            if(res1!=None):
                if(len(res1)>0):
                    break
        print(len(res1))
        res1=res1[0]
    '''
    j+=1
    wb.save('snap.xls')

'''
wb=xlwt.Workbook()

path=[ "https://www.snapdeal.com/product/redmi-redmi-note-4-4gb/655230586970#bcrumbSearch:redmi%204%20mobile%20phone"]

mysheets=['Redmi4']

for p in range(0,len(path)):
    print(path[p])
    get_review(path[p],mysheets[p],wb)


'''

path="https://www.snapdeal.com/product/redmi-redmi-note-4-4gb/655230586970#bcrumbSearch:redmi%204%20mobile%20phone"
web = requests.get(path).text
ws=BeautifulSoup(web,'lxml')
res=[]

#wb=xlwt.Workbook()
res=ws.find('div')
res1=res.find('div',class_='head')

while True:
    web = requests.get(path).text
    ws=BeautifulSoup(web,'lxml')            
    res1=res.find('div',class_='head')
    if(res1!=None):
        if(len(res1)>0):
            break
    #print(len(res1))
res1=res1[0]

print(res1)


