#include <iostream>
#include <cmath>

using namespace std;

int main()
{
    int number, remainder;
    cout<<"Please enter an integer : "<< endl;
    cin >> number;
    remainder = number % 2;
    if ( remainder == 0 ) {
        cout << number << " is an Even Number"<< endl;
    }else{
        cout << number << " is an Odd Number"<< endl;
    }

    int number2;
    number2 = pow(number, 2);
    cout<< number2<<endl;

    return 0;
}
