# buat simulasi ANJING duduk dan berguling!
# buat fungsi sit() dan roll_over() dalam class Anjing()
# buat class pegawai() untuk hasilkan nama, gaji 
# buat inherit class dengan class parent()

#---------
class Dog():
    def sit(a):
        print(f"{a} is now sitting")
    def roll_over(b):
        print(f"{b} rolled over!")

Dog.sit("Husky")
Dog.roll_over("Husky")

#---------
class Employee():
    def emp(a, b):
        data = (a,"Salary",b)
        print(data)

Employee.emp("Zara", 3000)
Employee.emp("Manni", 5000)

#---------
class Parent():
    print("Invoke parent class")
    class child():
        print("Invoke child class")

Parent.child()

# Mission Completed! damn lebih gampang daripada Loop