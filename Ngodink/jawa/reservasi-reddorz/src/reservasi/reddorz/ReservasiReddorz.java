/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package reservasi.reddorz;
import java.util.Scanner;
/**
 *
 * @author admin
 */
public class ReservasiReddorz {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        
       String name;
       int type, waktu;
       
       hitunghotel hotel = new hitunghotel();
       
       System.out.println("|==========PINTU MERAH==========|");
       Scanner nama = new Scanner(System.in);
       System.out.print("Nama : ");
       name = nama.next();
       hotel.setName(name);
       
       System.out.println("\n===============Pilih Jenis Kamar=============");
       System.out.println("1. Deluxe Room   | Rp.250.000");
       System.out.println("2. Premium Room  | Rp.500.000");
       System.out.println("3. Superior Room | RP.750.000");
       
       Scanner pilih = new Scanner(System.in);
       System.out.println("Jenis Kamar");
       type = pilih.nextInt();
       hotel.setType(type);
       
       Scanner lama = new Scanner(System.in);
       System.out.print("Tanggal ");
       waktu = lama.nextInt();
       hotel.setWaktu(waktu);
       
       System.out.println("================= Nota Pembayaran =================");
       System.out.println("Nama Pelanggan    : " + hotel.getName());
       System.out.println("Jenis Kamar       : " + hotel.get_kamar());
       System.out.println("Tarif Penginapan  : Rp." + hotel.get_harga());
       System.out.println("Total Pembayaran  : Rp." + hotel.get_total());
       System.out.println("===================================================");
       
       
    }
    
}
