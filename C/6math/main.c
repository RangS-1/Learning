#include <stdio.h>
#include <math.h>

int main(){
    int x = 10;
    float pi = 3.145156;

    //int z = pow(x, 3); pangkat
    //float z = sqrt(x); akar, better use float and %.2f
    //float z = round(pi); membulatkan desimal/float 
    //float z = ceil(pi); membulatkan ke paling besar
    //float z = floor(pi); membulatkan ke paling kecil
    //int z = abs(x); nilai absolute, misal -10 jadi 10 
    //int z = log(x); //logaritma natural basis e
    //int z = sin(x); //sinus
    float z = cos(pi); //cos dan sin lebih baik gunakan float, jika tidak ya 0
    //int z = tan(x); tan
    
    printf("%d", z);
    return 0;
}