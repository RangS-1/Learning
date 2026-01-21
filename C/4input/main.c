#include <stdio.h>

int main(){
    int age;
    char name[30]; //max input for string

    printf("Enter your age: \n");
    scanf(" %d", &age); // update age value connect to printf above
    //add " " in %d so your output still visible 
    
    printf("Enter your full name: ");
    fgets(name, 30, stdin); //scanf can't read " " so use 'file get string"
    //fgets(name, sizeof(name), stdin); use it so you don't need to change it manually
    //add variable, max input and standard input

    printf("So your age is %d\n", age); // show updated value
    printf("And your full name is %s", name);
    return 0;
}