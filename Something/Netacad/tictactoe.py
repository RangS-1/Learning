# Tic Tac Toe Game
from random import randrange as rr

def display_papan(papan):
	print("+-------" * 3,"x", sep="")
	for horizontal in range(3):
		print("|       " * 3,"|", sep="")
		for vertikal in range(3):
			print("|   " + str(papan[horizontal][vertikal]) + "   ", end="")
		print("|")
		print("|       " * 3,"|",sep="")
		print("+-------" * 3,"+",sep="")


def enter_move(papan):
	ok = False
	while not ok:
		move = input("Masukkan langkah anda: ") 
		ok = len(move) == 1 and move >= '1' and move <= '9'
		if not ok:
			print("Langkah tidak valid - ulangi!")
			continue
		move = int(move) - 1
		horizontal = move // 3 	
		vertikal = move % 3		
		sign = papan[horizontal][vertikal]
		ok = sign not in ['O','X'] 
		if not ok:
			print("Daerah sudah terisi - Ulangi!")
			continue
	papan[horizontal][vertikal] = 'O' 	


def daerah_kosong(papan):
	daerah_bebas = []	
	for horizontal in range(3): 
		for vertikal in range(3): 
			if papan[horizontal][vertikal] not in ['O','X']:
				daerah_bebas.append((horizontal,vertikal)) 
	return daerah_bebas


def pemenangnyo(papan,sgn):
	if sgn == "X":	
		siapa = 'me'	
	elif sgn == "O": 
		siapa = 'you'	
	else:
		siapa = None	
	silang1 = silang2 = True  
	for kolom_acak in range(3):
		if papan[kolom_acak][0] == sgn and papan[kolom_acak][1] == sgn and papan[kolom_acak][2] == sgn:	
			return siapa
		if papan[0][kolom_acak] == sgn and papan[1][kolom_acak] == sgn and papan[2][kolom_acak] == sgn: 
			return siapa
		if papan[kolom_acak][kolom_acak] != sgn:
			silang1 = False
		if papan[2 - kolom_acak][2 - kolom_acak] != sgn: 
			silang2 = False
	if silang1 or silang2:
		return siapa
	return None


def draw_move(papan):
	daerah_bebas = daerah_kosong(papan)
	cnt = len(daerah_bebas)
	if cnt > 0:	
		komputer = rr(cnt)
		horizontal, vertikal = daerah_bebas[komputer]
		papan[horizontal][vertikal] = 'X'


papan = [ [3 * j + i + 1 for i in range(3)] for j in range(3) ] 
papan[1][1] = 'X' 
daerah_bebas = daerah_kosong(papan)
giliran_ku = True 
while len(daerah_bebas):
	display_papan(papan)
	if giliran_ku:
		enter_move(papan)
		pemenang = pemenangnyo(papan,'O')
	else:	
		draw_move(papan)
		pemenang = pemenangnyo(papan,'X')
	if pemenang != None:
		break
	giliran_ku = not giliran_ku		
	daerah_bebas = daerah_kosong(papan)

display_papan(papan)
if pemenang == 'you':
	print("Oke! Lu menang!")
elif pemenang == 'me':
	print("Yahaha! Gua yang menang!")
else:
	print("Boleh juga! Kita seri!")