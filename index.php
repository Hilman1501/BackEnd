<?php

class Animal {
    private $animals = [];

    // Constructor untuk menginisialisasi data awal
    public function __construct() {
        $this->animals = ['Ayam', 'Ikan'];
    }

    // Method untuk menampilkan semua hewan
    public function index() {
        foreach ($this->animals as $animal) {
            echo $animal . '<br>';
        }
    }

    // Method untuk menambahkan hewan baru
    public function store($animal) {
        array_push($this->animals, $animal);
        echo "Hewan baru '$animal' telah ditambahkan.<br>";
    }

    // Method untuk mengupdate hewan berdasarkan index
    public function update($index, $newAnimal) {
        if (isset($this->animals[$index])) {
            $oldAnimal = $this->animals[$index];
            $this->animals[$index] = $newAnimal;
            echo "Hewan '$oldAnimal' telah diupdate menjadi '$newAnimal'.<br>";
        } else {
            echo "Index $index tidak ditemukan.<br>";
        }
    }

    // Method untuk menghapus hewan berdasarkan index
    public function destroy($index) {
        if (isset($this->animals[$index])) {
            $deletedAnimal = $this->animals[$index];
            array_splice($this->animals, $index, 1);
            echo "Hewan '$deletedAnimal' telah dihapus.<br>";
        } else {
            echo "Index $index tidak ditemukan.<br>";
        }
    }
}

// Membuat instance dari kelas Animal
$animal = new Animal();

// Menampilkan seluruh hewan
echo 'Index Menampilkan seluruh hewan:<br>';
$animal->index();
echo '<br>';

// Menambahkan hewan baru (burung)
echo 'Store Menambahkan hewan baru (burung):<br>';
$animal->store('Burung');
$animal->index();
echo '<br>';

// Mengupdate hewan
echo 'Update Mengupdate hewan:<br>';
$animal->update(0, 'Kucing Anggora');
$animal->index();
echo '<br>';

// Menghapus hewan
echo 'Destroy Menghapus hewan:<br>';
$animal->destroy(1);
$animal->index();
echo '<br>';

?>
