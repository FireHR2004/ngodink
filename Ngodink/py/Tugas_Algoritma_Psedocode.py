# Creator by Muhammad Fathir Ikhsan
# TI 1A D4 Teknik Informatika
# NIM 2207411008

# Dilarang keras Copy Paste HARAM HUKUMNYA !!!
# Dari pada copas mending kita belajar sama2

# memanggil module
from operator import truediv

phi = 3.14  # variable

# membuat fungsi konversi jarak dari meter ke kilometer
def mkekm(nilai):
    x = 1000 #jumlah amgka yang akan di konversikan dari meter ke kilometer
    hasil = nilai/x #rumus menkonversi jarak dari meter ke kilometer
    return hasil

# membuat fungsi konversi jarak dari meter ke centimeter
def mkecm(nilai):
    x = 100 #jumlah amgka yang akan di konversikan dari meter ke centimeter
    hasil = nilai*x #rumus menkonversi jarak dari meter ke centimeter
    return hasil

# membuat fungsi rumus keliling lingkaran menggunakan jari-jari
def klingkaranr(r):
    k = 2*phi*r #rumus keliling lingkaran jika yang diketahui adalah jari-jari
    return k

# membuat fungsi rumus keliling lingkaran menggunakan diameter
def klingkarand(d):
    k = phi*d #rumus keliling lingkaran jika menggunakan diameter
    return k

# membuat fungsi rumus luas lingkaran menggunakan jari-jari
def lulingkaranr(r):
    l = phi*r*r #rumus luas lingkaran
    return l

# membuat fungsi rumus luas lingkaran menggunakan diameter
def lulingkarand(d):
    r = d/2 #jika yang diketahui diameter maka diameter akan dibagi 2 untuk mendapatkan nilai jari-jari
    l = phi*r*r #rumus luas lingkaran
    return l
# membuat fungsi mencari bilangan prima
def prima(x):
    if x > 1:
        for i in range(2,x):
            if (x%i) == 0:
                print(x,"adalah bukan bilangan prima")
            else:
                print(x,"adalah bilangan prima")
    else:
        print(x,"adalah bukan bilangan priama")

# Dilarang keras Copy Paste HARAM HUKUMNYA !!!
# Dari pada copas mending kita belajar sama2

print("+=========================================+")
print("+1. Menentukan Bilangan Bulat & Ganjil    +")
print("+2. Menentukan Panjang                    +")
print("+3. Menentukan Keliling & Luas Lingkaran  +")
print("+4. Menentukan Nilai Akhir atau Rata-Rata +")
print("+5. Menentukan Umur                       +")
print("+6. Menentukan Bilangan Prima             +")
print("+=========================================+")
while True:
    try:
        #memunculkan output input
        pilih = int(input("Pilih angka : "))
        break
    #jika memasukan selain angka maka akan muncul error seperti di bawah dan nnti akan di mintakan masukan angka
    except:
        print("Masukan Angka")

# jika pilih nomor 1
if pilih == 1:
    print("Masukan Bilangan")
    while True:
            try:
                nilai = int(input("Nilai : "))
                if nilai % 2 == 0:
                    print("Nilai", nilai, "adalah bilangan Bulat")
                    break
                else:
                    print("Nilai", nilai, "adalah bilangan Ganjil")
                    break
            except:
                print("Masukan Angka")
# jika pilih nomor 2
elif pilih == 2:
    print("1. Meter(m) ke Centimeter(cm)")
    print("2. Meter(m) ke Kilometer(km)")
    while True:
            try:
                pilih = int(input("Pilih angka : "))
                break
            except:
                print("Masukan Angka")
    
    if pilih == 1:
        print("Masukan nilai")
        nilai = float(input("Nilai : "))
        print(mkecm(nilai))
    elif pilih == 2:
        print("Masukan nilai")
        nilai = float(input("Nilai : "))
        print(mkekm(nilai))
    else:
        print("Pilih sesuai Menu yang ada")   
# jika pilih nomor 3
elif pilih == 3:
    print("1. Keliling Lingkaran Diameter")
    print("2. Keliling Lingkaran Jari-Jari")
    print("3. Luas lingkaran Diameter")
    print("4. Luas lingkaran Jari-Jari")
    while True:
            try:
                pilih = int(input("Pilih angka : "))
                break
            except:
                print("Masukan Angka")
                
    if pilih == 1:
        print("Masukan nilai")
        d = int(input("Jari-Jari : "))
        print(klingkarand(d))
    elif pilih == 2:
        print("Masukan nilai")
        r = int(input("Jari-Jari : "))
        print(klingkaranr(r))
    elif pilih == 3:
        print("Masukan nilai")
        d = int(input("Jari-Jari : "))
        print(lulingkarand(d))
    elif pilih == 4:
        print("Masukan nilai")
        r = int(input("Jari-Jari : "))
        print(lulingkaranr(r))
    else:
        print("Pilih sesuai Menu yang ada")
# jika pilih nomor 4
elif pilih == 4:
    print("Masukan nilai rata-rata matakuliah 1")
    m1 = int(input("Nilai : "))
    print("Masukan nilai rata-rata matakuliah 2")
    m2 = int(input("Nilai : "))
    print("Masukan nilai rata-rata matakuliah 3")
    m3 = int(input("Nilai : "))
    print("Masukan nilai rata-rata matakuliah 4")
    m4 = int(input("Nilai : "))

    s = m1+m2+m3+m4
    rata = s/4
    print(rata)
# jika pilih nomor 5
elif pilih == 5:
    print("Masukan Tahun lahir anda")
    tl = int(input("tahun : "))
    print("Masukan Tahun Sekarang")
    ts = int(input("tahun : "))
    umur = ts-tl
    print("Umur anda", umur)
elif pilih == 6:
    x = int(input("Masukan Bilangan : "))
    print(prima(x))
# jika memilih angka lebih dari 5 maka akan muncul
else:
    print("pilih sesual menu yang ada")

# Creator by Muhammad Fathir Ikhsan
# TI 1A D4 Teknik Informatika
# NIM 2207411008