# nah paling gampang nih!
# buat if statements nilai ulangan dengan user memasukkan input dalam bentuk integer

nilai = int(input("Masukkan nilai mu: "))

if nilai >= 90:
    print(f"Nilaimu adalah: {nilai} dan mendapatkan A")
elif nilai >= 80:
    print(f"Nilaimu adalah: {nilai} dan mendapatkan B")
elif nilai >= 75:
    print(f"Nilaimu adalah: {nilai} dan mendapatkan C")
else:
    print(f"Nilaimu adalah: {nilai} dan mendapatkan F")