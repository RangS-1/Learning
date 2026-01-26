#include <iostream>
using namespace std;

int main(){

    const float PI = 3.1415654; 
    //PI = 2.04; if you add this, it will say read-only
    //you can't modify var that using const (consistent)

    cout << PI << endl;

    return 0;
}