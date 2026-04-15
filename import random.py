import random

# Daftar-daftar yang telah dibuat
countries = ["Jepang", "Islandia", "Peru", "Italia", "Selandia Baru"]
books = ["Sapiens", "Atomic Habits", "The Lord of the Rings", "Dune", "1984"]
hobbies = ["Memasak", "Fotografi", "Mendaki", "Bermain Gitar", "Belajar Bahasa"]

print("--- Perencana Prioritas dan Statistik Keinginan ---")

# 1. Analisis Statistik Sederhana
print(f"\n Statistik Daftar Anda:")
print(f"  - Total Negara: {len(countries)}")
print(f"  - Total Buku: {len(books)}")
print(f"  - Total Hobi: {len(hobbies)}")

# 2. Sistem Prioritas (Contoh: memilih item pertama sebagai prioritas)
print("\n Prioritas Utama:")
# Menggunakan indexing [0] untuk mengambil elemen pertama (prioritas tertinggi)
highest_priority_country = countries[0]
highest_priority_book = books[0]
print(f"  - Negara untuk diprioritaskan: {highest_priority_country}")
print(f"  - Buku untuk diprioritaskan: {highest_priority_book}")

# 3. Saran Acak (Randomizer)
# Menggunakan fungsi choice dari modul 'random' untuk memilih item secara acak
random_hobby = random.choice(hobbies)
print(f"\n Bingung mau ngapain? Coba lakukan hobi: {random_hobby} hari ini!")