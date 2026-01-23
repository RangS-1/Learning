#include <stdio.h>

int square(int num){ //return function!
    return num * num; //if it not using return, the int result will not do anything
}

int main(){
    int x = square(2);

    printf("%d", x);

    return 0;
}