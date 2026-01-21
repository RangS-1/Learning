#include <stdio.h>

int main(){
    char currency = '$';
    char item[50];
    int many;
    int price;

    printf("Hello and welcome!\n");
    
    printf("What you want to buy? \n");
    fgets(item, sizeof(item), stdin);

    printf("How many you want to buy? \n");
    scanf("%d", &many);

    printf("What is the price for each? \n");
    scanf("%d", &price);

    float total = many * price;

    printf("So you buy %d %s", many, item);
    printf("Okay, everything is %c%2.f", currency, total);
    
    return 0;
}