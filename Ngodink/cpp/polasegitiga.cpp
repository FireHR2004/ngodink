// Algoritma Pemrogaman
// Politeknik Negeri Jakarta
// 2207411008 Muhammad Fathir Ikhsan
#include<iostream>
using namespace std;

int main() {
    int height;
    char alig, sort, chr;
    cout<<"==================================================="<<endl;
    cout<<"==               TRIANGLE PATTERN                =="<<endl;
    cout<<"==================================================="<<endl;
    cout << "Input Height: ";
    cin >> height;
    cout << "Input Char: ";
    cin >> chr;
    cout<<"---------------------------------------------------"<<endl;
    do{
        cout<< "Alignment (l/c/r)   : ";
        cin>> alig;
        // Left
        if(alig == 'l'){
            do{
                cout<< "Sorting (a/d) : ";
                cin>> sort; 
                // Left Ascending
                if(sort == 'a'){
                    for(int i = 1; i <= height; ++i)
                    {
                        for(int j = 1; j <= i; ++j)
                        {
                            cout << chr;
                        }
                        cout << "\n";
                    }
                    break;
                }
                // Left Descending
                else if(sort == 'd'){
                    for(int i = height; i >= 1; --i)
                    {
                        for(int j = 1; j <= i; ++j)
                        {
                            cout << chr;
                        }
                        cout << endl;
                    }
                    break;
                }else{
                    cout<< "Pilih (a/d)"<<endl;
                }
            }while(sort <= 0 or sort >= 0);
            break;
        }
        // Center
        else if(alig == 'c'){
            do{
                cout<< "Sorting (a/d) : ";
                cin>> sort;
                // Center Ascending 
                if(sort == 'a'){
                    for(int i=1;i<=height;i++){
                    	for(int k=1; k<=height-i;++k){
                			cout<<" ";
                		}
                		for(int j=0;j!=2*i-1;j++){
                			cout<<chr<<"";
                    	}
                    	cout<<endl;
                    }
                    break;
                }
                // Center Descending
                else if(sort == 'd'){
                    for(int i=height;i>=1;--i){
                    	for(int k=1; k<=height-i;++k){
                    		cout<<" ";
                		}
                		for(int j=0;j!=2*i-1;j++){
                			cout<<chr<<"";
                		}
                    	cout<<endl;
                    }
                    break;
                }else{
                    cout<< "Pilih (a/d)"<<endl;
                }
            }while(sort <= 0 or sort >= 0);
            break;
        }
        // Right
        else if(alig == 'r'){
            do{
                cout<< "Sorting (a/d) : ";
                cin>> sort; 
                // Right Ascending
                if(sort == 'a'){
                    for(int i = 0; i < height; i++)
                    {
                        for(int j = 1; j <= height; j++)
                        {
                             if(j<height-i)
                                 cout<<" ";                
                             else
                                 cout << chr;
                        }
                        cout << "\n";
                    }
                    break;
                }
                // Right Descending
                else if(sort == 'd'){
                    for(int i = 1; i <= height; i++)
                    {
                        for(int j = 1; j <= height; j++)
                        {
                             if(j<i)
                                 cout<<" ";                
                             else
                                 cout << chr;
                        }
                        cout << "\n";
                    }
                    break;
                }else{
                    cout<< "Pilih (a/d)"<<endl;
                }
            }while(sort <= 0 or sort >= 0);
            break;
        }else{
            cout<< "Pilih (l/c/r)"<<endl;
        }
    }while(alig <=0 or alig >= 0);
    
    return 0;
}
// 2207411008 Muhammad Fathir Ikhsan
// Politeknik Negeri Jakarta
// Algoritma Pemrogaman
