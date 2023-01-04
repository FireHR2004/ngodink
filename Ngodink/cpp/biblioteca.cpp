#include<iostream>
#include<string>
using namespace std;
int baynyak, pilih, hasilCari;
string buku[10], cariBuku, temp;
int bBuku =  sizeof(buku)/sizeof(*buku);
char ulang;

void search(){
    cout<<" Cari data: ";
    cin>>cariBuku;  

    for (int k = 0; k < bBuku; k++) {
        if(cariBuku == buku[k]){
        hasilCari++;
        }
    }
    if(hasilCari==0){
        cout<<"Data Tidak Ditemukan"<<endl;
    }else{
        cout<<" Hasil pencarian "<<cariBuku<<endl;
        for (int l = 0; l < bBuku; l++) 
        {
            if(cariBuku == buku[l]){
                cout<<" ada di nomor "<<l<<endl;
            }
        }
        cout<<"|==================================================|"<< endl;
    }    
}

void fill(){
    cout<<" 1. Filter A-Z\n";
    cout<<" 2. Filter Z-A\n";
    do
    {
        cout<<"Pilih: ";
        do
        {
            cin>>pilih;
            switch (pilih)
            {
            case 1:
                for(int mumet = 0; mumet < bBuku; ++mumet){
                    for(int rai = mumet+1; rai < bBuku; ++rai){
                        if(buku[mumet]>buku[rai]){
                            temp = buku[mumet];
                            buku[mumet] = buku[rai];
                            buku[rai] = temp;
                        }
                    }        
                }

                for(int mumet = 0; mumet<bBuku; ++mumet){
                    cout<<" "<<mumet<<". "<<buku[mumet]<<endl;
                } 
                break;
            case 2:
                for(int mumet = 0; mumet < bBuku; ++mumet){
                    for(int rai = mumet+1; rai < bBuku; ++rai){
                        if(buku[mumet]<buku[rai]){
                            temp = buku[mumet];
                            buku[mumet] = buku[rai];
                            buku[rai] = temp;
                        }
                    }        
                }

                for(int mumet = 0; mumet < bBuku; ++mumet){
                    cout<<" "<<mumet<<". "<<buku[mumet]<<endl;
                } 
                break;

            default:
                break;
            }
        } while (pilih != 1 && pilih != 2);
        cout<<"Apakah anda ingin melanjutkan filter yang berbeda? (y/n)";
        cin>>ulang;
    } while (ulang != 'n');
}

int main(){
    do
    {
        cout<<"Muhammad Fathir Ikhasn\n";
        cout<<"2207411008\n\n";
        cout<<"|==================================================|"<<endl;
        cout<<"|              Bazar Buku Holocaust   :)           |"<<endl;
        cout<<"|==================================================|"<<endl;
        cout<<"|1. Buku                                           |"<<endl;
        cout<<"|2. Keluar                                         |"<<endl;
        cout<<" Pilih menu: "; 
        do{
            cin>>pilih;
            switch (pilih)
            {
                case 1:
                    for(int a=0; a<bBuku; a++){
                        cout<<" Masukan Judul Buku: ";  
                        cin>>buku[a];
                    }
                    cout<<" Ada "<<bBuku<<" yang terdaftar";
                    cout<<" Daftar Buku: \n";
                    for (int j = 0; j < bBuku; j++) {
                        cout<<" "<<j<<". "<<buku[j]<<endl;
                    }
                    cout<<"|==================================================|"<<endl;                    
                    cout<<" 1. Cari judul buku\n";
                    cout<<" 2. Filter Buku\n";
                    cout<<"|==================================================|"<<endl;                      
                    do
                    {
                        cout<<" Pilih menu: ";      
                        do
                        {
                            cin>>pilih;
                            switch (pilih)
                            {
                            case 1:
                                do
                                {
                                    search();
                                    cout<<" Kembaili lanjut cari? (y/n)"<<endl;
                                    cin>>ulang;                       
                                }while (ulang != 'n');
                                break;
                            case 2:
                                do
                                {
                                    fill();
                                    cout<<" Apakah mau filter ulang? (y/n)"<<endl;
                                    cin>>ulang;                       
                                }while (ulang != 'n');                                
                                break;
                                                                
                            default:
                                break;
                            }
                        } while (pilih != 1 && pilih != 2);  
                        cout<<" Apakah anda mau kembali ke halaman sebelumnya? (y/n)"<<endl;
                        cin>>ulang;                                              
                    } while (ulang != 'n');
                    break;
                default:
                    break;
            }      
        }while(pilih != 1 && pilih != 2);
        cout<<" Yakin mau keluar? :) (y/n)"<<endl;
        cin>>ulang;
    }while (ulang != 'y');

    return 0;
}