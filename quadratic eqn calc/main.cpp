#include <iostream>
#include <cmath>

using namespace std;

int a,b,c;
float D, x, x1, x2;

float discr()
{

    D = pow(b,2) - (4*a*c);
    return D;
}

void oneroot()
{
    x = -b / (2*a);
    cout<<"x = "<<x<<endl;
}
void real()
{
    x1 = (-b + sqrt(D))/(2*a);
    x2 = (-b - sqrt(D))/(2*a);

    cout<<"x1 = "<<x1<<" and x2 = "<<x2<<endl;
}
 void imaginary()
 {
     x = -b;
     cout<<"x = "<<x<<" +/- sqrt( "<<D<<" )i/"<<2*a<<endl;

 }

int main()
{
    cout<<"Input a:"<<endl;
    cin>>a;
    cout<<"Input b:"<<endl;
    cin>>b;
    cout<<"Input c:"<<endl;
    cin>>c;
    discr();
    if (D == 0){
        oneroot();
    }
    else if (D > 0){
        real();
    }
    else{
        imaginary();
    }
    return 0;
}
