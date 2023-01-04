	
#include <iostream>
using namespace std;
int mat[9][9];
int bar, kol, n, x, y;
char pilih;
int main()
{
    cout<<"==================================================="<<endl;
    cout<<"==               ARRAY MULTIDIMENSI              =="<<endl;
    cout<<"==                     MATRIX                    =="<<endl;
    cout<<"==================================================="<<endl;
    do{
        cout << "Input Banyak Baris [1-9] :";
        cin >> bar;

        do{
            cout << "Input Banyak Kolom [1-9] :";
            cin >> kol;

            cout<<"----------------------------------------------------"<<endl;
            for(int x = 0; x < bar; ++x)  
            {  
                cout<<"| ";
                for(int y = 0; y < kol; ++y)  
                {  
                    cout<< mat[x][y]<<" ";  
                }  
                cout<<"|"<<endl;  
            }
            cout<<"----------------------------------------------------"<<endl;
            cout<<"Baris : ";
            cin>>y;
            cout<<"Kolom : ";
            cin>>x;
            cout<<"Niilai :";
            cin>>n;

            mat[x][y]=n;
            do{
                cout<<"Input lagi Nilai Data? (y/n) :";
                cin>>pilih;
                if(pilih == 'y'){
                   
                    cout<<"Baris : ";
                    cin>>y;
                    cout<<"Kolom : ";
                    cin>>x;
                    cout<<"Niilai :";
                    cin>>n;

                    mat[x][y]=n;
                   
                }else{
                    break;
                }
            }while(pilih != y && pilih != n);
        }while(kol!= 1 && kol!= 2 && kol!= 3 && kol!= 4 && kol!= 5 && kol!= 6 && kol!= 7 && kol!= 8 && kol!= 9);

    }while(bar!= 1 && bar!= 2 && bar!= 3 && bar!= 4 && bar!= 5 && bar!= 6 && bar!= 7 && bar!= 8 && bar!= 9);
   
    return 0;
}