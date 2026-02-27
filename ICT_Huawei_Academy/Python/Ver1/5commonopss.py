# common operation string in python
# buat var dengan value "python" sebagai S
# buat output ['pyt', 'on'] dengan str.split
# buat output py menjadi PY (no thon)
# buat output PYTHON dan kembalikan ke python
# tambah \n
# buat output life is short dengan str.join(sequence)
# format string dan hasilkan output hello world 12
# owalah banyak bet -_-

#--------------
var = "python"
pisah = var.split("h", 1) #akhirnya paham maksudnya coy _:)
print(pisah)

#--------------
output = var[:2]
upper = str.upper(output)
print(upper)
lower = str.lower(upper)
print(lower)
print("\n")

#--------------
join = " ".join(["life", "is", "short"])
print(join)
ok = " ".join(["hello", "world", "12"])
print(ok)

# mission completed! capek juga ternyata