array1 = [1, 2, 3, 4, 5]
array2 = [6, 7, 8, 9, 10]
i = 0
z = 0
array2 = array2[::-1]
l = len(array1) + len(array2)
resultant = []
c1 = 1
c2 = 1
while i < l/2:
    resultant.append(array1[z])
    resultant.append(array2[z])
    i = i + 1
    z = z + 1
a = 0
for a in resultant:
    print(a)