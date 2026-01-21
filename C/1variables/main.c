#include <stdio.h>
#include <stdbool.h> //boolean

int main(){
    int umur = 17;
    float ipk = 4.15;
    char nilai = 'A'; // Pakai '' bukan ""
    char nama[] = "Rangga Wijaya"; // Array Characters!
    bool online = true;

    printf("Lu berumur %d\n", umur); // %d for decimal
    printf("Lu punya ipk %f\n", ipk); // Tambah %2f untuk ambil berapa banyak angka di belakang koma!
    printf("Lu punya nilai %c\n", nilai);
    printf("Hai, namamu %n\n", nama); // String
    printf("Oke dia itu %d", online);

    return 0;
}