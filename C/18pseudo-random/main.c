#include <stdio.h>
#include <stdlib.h> //standard library
#include <time.h> //just time

//pseudo-random adalah nilai random tetapi tidak random -_-
//terprediksi karena random berisi seed (kayak minecraft)
int main(){

    srand(time(NULL)); //seed random, ini akan membuat rand() benar-benar random, jika tidak ya hasilnya terus-terusan sama
                       //misal dapet 41 ya terus 41
//    printf("%d", rand());
//    printf("%d", RAND_MAX); maximum of random
    
    //simple dice in c
    int min = 1;
    int max = 12;

    int dice = (rand() % max) + min;

    printf("You got %d", dice);
    return 0;
}