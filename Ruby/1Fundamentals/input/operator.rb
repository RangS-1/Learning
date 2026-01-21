print "Enter two numbers: "
n1 = gets.chomp
n2 = gets.chomp

# Operasi
jumlah = n1.to_i + n2.to_i
#Nilai diubah jadi integer karena jika tidak
#Maka string + string = stringstring 

puts "Jumlah: #{jumlah}"