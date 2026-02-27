# gunakan module os
import os

#------- dasar
print(os.getpid())      #tau lah ya apa itu PID
print(os.getppid())     #PID asli
print(os.getcwd())      #lokasi file
print(os.chdir(".."))   #pindah Directory
print(os.listdir())     #isi folder saat ini
print(os.walk("catatan.txt")) #gak paham -_-

#-------- advanced
location = "C:\Users\RangS\Documents\Programming\Git\Learning"
print(os.path.abspath("catatan.txt")) #posisi absolute sebuah file dalam path
print(os.path.exists(location)) #nyari apakah catatan.txt ada atau tidak dalam folder, True/False
print(os.path.getsize(location)) #ukuran file
print(os.path.isfile(location)) #file atau dir?
print(os.path.isdir(location))

# mission uncompleted! masih belum paham path tuh ke mana?