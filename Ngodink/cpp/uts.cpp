#include <iostream>
using namespace std;

int main() {
    int i, j, k, val, chr;
    char sort;
    cout<<"==================================================="<<endl;
    cout<<"== NAMA : MUHAMMAD FATHIR IKHSAN                 =="<<endl;
    cout<<"== NIM : 2207411008                              =="<<endl;
    cout<<"==================================================="<<endl;
    do
    {
        cout<<"Input Value [1-9]    : "; 
        cin>>val;
    } while (val != 1 && val != 2 && val != 3 && val != 4 && val != 5 && val != 6 && val != 7 && val != 8 && val != 9);
    
    do
    {
        cout<<"Sorting (a/d)        : "; 
        cin>>sort;
        cout<<"==================================================="<<endl;
    }while (sort != 'a' && sort != 'd');

    switch (sort)
    {
        case 'a':
            for(int i = 1, j = 0, k = 0, chr = 1; i <= val; i++, chr++)
            {
                for(j = 1; j <= val-i; j++)
                {
                    cout <<" ";
                }
                for (k=0; k<2*i-1; k++)
                {
                    cout<<chr;
                }
                cout << endl;
            }    
            for(int i=2, chr=val - 1; i<=val; i++, chr--)
            {
                for(int j=1; j<i; j++)
                {
                    cout << " ";
                }
                for(int k=i; k<=val; k++)
                {
                    cout<<chr;
                }
                for(int k=i; k<val; k++)
                {
                cout<<chr;
                }
                cout << endl;
            }
            break;
        case 'd':
            for(int i= 1, chr=val; i<=val; i++, chr--)
            {
                for(int j=1; j<i; j++)
                {
                    cout << " ";
                }
                for(int k=i; k<=val; k++)
                {
                    cout<<chr;
                }
                for(int k=i; k<val; k++)
                {
                cout<<chr;
                }
                cout << endl;
            }
            for(int i = 1, j = 0, k = 0, chr = 1; i <= val; i++, chr++)
            {
                for(j = 1; j <= val-i; j++)
                {
                    cout <<" ";
                }
                for (k=0; k<2*i-1; k++)
                {
                    cout<<chr;
                }
                cout << endl;
            }
            break;
    }
}