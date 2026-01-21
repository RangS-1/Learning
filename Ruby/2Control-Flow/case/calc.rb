# Program to build a simple calculator
# using case statement

print "Pilih operator (+, -, *, /, **): ";
operator = gets.chomp

print "Angka pertama: "
n1 = gets.chomp.to_f

print "Angka kedua: "
n2 = gets.chomp.to_f

case operator
when "+"
  print "#{n1} + #{n2} = #{n1 + n2}"
  
when "-"
  print "#{n1} - #{n2} = #{n1 - n2}"
  
when "*"
  print "#{n1} * #{n2} = #{n1 * n2}"
  
when "**"
  print "#{n1} ** #{n2} = #{n1 ** n2}"

when "/"
  if n2 == 0
    print "Cannot divide by zero."
    
  else
    print "#{n1} / #{n2} = #{n1 / n2}"
    
  end
  
else
  print "Salah Operator!"

end