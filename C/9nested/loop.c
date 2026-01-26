#include <stdio.h>

int main(){

    //for(int i = 1; i < 4; i++){
    //    for(int j = 1; j <= 10; j++){
    //        printf("%d ", j);
    //    }
    //    printf("\n");
    //}
    for(int i = 1; i <= 10; i++){
        for(int j = 1; j <= 10; j++){
            printf("%3d ", i * j); //%3d = space 3 times
        }
        printf("\n");
    }

    int baris = 0;
    int kolom = 0;
    char simbol = '\0';

    printf("Masukkan baris: ");
    scanf("%d", &baris);

    printf("Masukkan kolom: ");
    scanf("%d", &kolom);

    printf("Masukkan simbol: ");
    scanf(" %c", &simbol);

    for(int i = 0; i <= kolom; i++){
        for(int j = 0; j <= baris; j++){
            printf("%2c", simbol);
        }
        printf("\n");
    }
    return 0;
}
