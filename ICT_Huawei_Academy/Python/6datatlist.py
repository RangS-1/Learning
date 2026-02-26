# buat list dengan [obj]
# gunakan append, remove, insert, pop, sort

#----------
haiwan = ['miaw', 'bark', 'RIP']
haiwan.append('dawg')
print(haiwan)

#----------
cuy = ['miaw', 'bark', 'RIP']
cuy.remove('RIP')
print(cuy)

#----------
c = ['miaw', 'bark', 'RIP']
c.insert(1,'Nah bro really?') #index dari 0
print(c)

#----------
eh = ['miaw', 'bark', 'RIP']
eh.pop(0) # mirip remove tapi index yang dihapus, bukan valuenya
print(eh)

#----------
l = ['miaw', 'bark', 'RIP']
lk = list(enumerate(l)) # menampilkan index dari tiap value
print(lk)

#----------
list = ['miaw', 'bark', 'RIP']
doble = [i + i for i in list] # menampilkan value 2 kali
print(doble) # agak pusing di sini coy

#----------
coba = ['12', '32', '45', '55']
coba.sort() # gak paham -_-
coba.reverse()
print(coba)

# Mission Completed!