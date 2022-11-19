#   Creator by Muhammad Fathir Ikhsan
#   D4 Teknik Informatika PNJ
#   ig : @mufaik04_

print("Hai Boleh kenalan g?")
jwb = input('Jawab y/n: ')
#   Jika jawab y
if jwb == 'y':
    #   outputnya
    print("Kenalin, nama gw Muhammad Fathir Ikhsan")

    print("Oh ya kalau boleh tau nama kamu siapa?")
    jwb1 = input('Nama Kamu: ')
    print("Halo "+ jwb1 +" salam kenal")

    print("Oh iya gw dari Jurusan Teknik Informatika, kalau lo dari jurusan mana?")
    jwb2 = input('Jurusan: ')
    print("oh dari jurusan "+ jwb2)

    print("Eh btw gw boleh minta ig lu g?")
    jwb3 = input('y/n: ')
    if jwb3 == 'y':
        ig = input('Nama IG lo: ')
        print("Ok gw follow ig "+ ig +" jangan lupa follow @mufaik04_")
    else:
        print("OK")
#   jika menjawab selain y
else:
    #   outputnya
    print("GALAK AMAT JADI ORANG")