#include <iostream>
#include <cmath>
using namespace std;

void uwu(){
    double number, hasil;
    cout<<"Yuk masukan angka"<<endl;
    cin>>number;
    hasil = sqrt(number);
    cout<<"hasil dari kuadrat "<<number<<" adalah "<<hasil<<"\n";
}

void ulang(){
    char ulang;
    do
    {
        uwu();
        do{
            cout<<"Apakah Mau lagi Baby? (y/n)";
            cin>>ulang;
        }while(ulang != 'y' && ulang != 'n');
        if(ulang == 'n') break;
    }while(ulang == 'y');
    
}

int main(){
    ulang();
    return 0;
}