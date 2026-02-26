# lebih gampang dari for loop, ahh python -_-
# buat output 1 sampai 5 meliwati 3 dan 5

i = 1
while i <= 5:
    if i == 3 or i == 5:
        i += 1
        continue
    print(i)
    i += 1