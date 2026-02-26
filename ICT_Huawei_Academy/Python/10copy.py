# buat copy data dengan shallow dan deep copy
import copy as cp

data = [[1,2,3],
        [4,5,6]]

shallow = cp.copy(data)
shallow[1][2] = 'Z'
print(shallow)

deep = cp.deepcopy(data)
deep[0][0] = 'X'
print(deep)