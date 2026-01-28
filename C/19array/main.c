//finally -_-
#include <stdio.h>

//var dengan banyak elements
int main(){

    int numbers[] = {10, 20, 30, 40, 50, 60, 70};
    char nilai[] = {'A', 'B', 'C', 'D'};

    //change elements
    numbers[0] = 100;

    for(int i = 0; i < 3; i++){
        printf("%d ", numbers[i]);
    }
    return 0;
}