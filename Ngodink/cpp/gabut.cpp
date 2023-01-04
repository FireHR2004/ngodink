#include <iostream>
#include <cmath>
using namespace std;

void pattern(){
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
}

void matrix(){
    
}

void search(){
    // int banyak;
    // //untuk menginput banyaknya data pada array
    // cout<<"Masukan banyak data: ";
    // cin>>banyak;
    // int data[banyak];
    // //untuk menginput nilai dari banyaknya data
    // for (int i = 0; i < 5; ++i) {
    //     cin >> data[i];
    // }

    // int panjang =  sizeof(data)/sizeof(*data);
    // int cariData, hasilCari;
    // //untuk menampilkan hasil data yang di input
    // cout<<"Hasil Data yang di input";
    // for (int j = 0; j < 5; j++) {
    //     cout<<data[j]<<endl;
    // }
    // //input untuk mencari data
    // cout<<"Cari data: ";
    // cin>>cariData;
    // for (int k = 0; k < 5; k++) {
    //     if(cariData==data[k]){
    //         hasilCari++;
    //     }
    // }
    // if(hasilCari==0){
    //     cout<<"Data Tidak Ditemukan";
    // }else{
    //     cout<<"Hasil pencarian "<<cariData<<endl;
    //     for (int l = 0; l < panjang; l++)
    //     {
    //         if(cariData == data[l]){
    //             cout<<l;
    //         }
    //     }
        
    // }
    string buku[] = {"Atlas", "RPUL", "Kamus Bahasa Jepang", "Mein Kampf", "Ayat-Ayat kiri", "Buku Bahasa Pemrogaman Python"};
    int bBuku =  sizeof(buku)/sizeof(*buku);
    string cariBuku;
    int hasilCari;

    cout<<"|==================================================|"<<endl;
    cout<<"|              Perpustakaan Holocaust              |"<<endl;
    cout<<"|==================================================|"<<endl;
    for (int j = 1; j < 5; j++) {
        cout<<" "<<j<<". "<<buku[j]<<endl;
    }

    cout<<"Cari data: ";
    cin>>cariBuku;
    for (int k = 1; k < 5; k++) {
        if(cariBuku == buku[k]){
            hasilCari++;
        }
    }
    if(hasilCari==0){
        cout<<"Data Tidak Ditemukan";
    }else{
        cout<<"Hasil pencarian "<<cariBuku<<endl;
        for (int l = 1; l < bBuku; l++)
        {
            if(cariBuku == buku[l]){
                cout<<l;
            }
        }
        
    }
}

int main(){
    int pilih;
    char pilih2;
    cout<<"==================================================="<<endl;
    cout<<"==1. Triangle Patten                             =="<<endl;
    cout<<"==2. Matrix                                      =="<<endl;
    cout<<"==3. Search                                      =="<<endl;
    cout<<"==4. Exit                                        =="<<endl;
    cout<<"==================================================="<<endl;
    cout<<"Pilih : ";
    cin >> pilih;
    do{
        if(pilih == 1)
        {
            pattern();
        }
        else if (pilih == 2)
        {
            matrix();
        }
        else if(pilih == 3)
        {
            search();
        }
        // else if (pilih == 4)
        // {
        //     cout<<"Yakeen Mau keluar?";
        //     cin>>pilih2;

        //     switch (pilih2)
        //     {
        //     case 'y':
        //         return 0;
        //     case 'n':
        //         return(pilih2);
        //     default:
        //         break;
        //     }
        // }
        else{
            cout<<"Pilih sesuai yang ada";
        }
        
    }while(pilih != 1 || pilih != 2 || pilih != 3 || pilih != 4);
}