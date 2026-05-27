/**
 * ========================================================
 * Expense Tracker App — main.js
 * ========================================================
 * Tulis seluruh kode JavaScript kamu di sini.
 */

// TODO [Basic] Buat variabel array untuk menyimpan semua data transaksi, contoh: let transactions = []
// TODO [Basic] Buat fungsi untuk menghasilkan ID unik secara otomatis, contoh: gunakan +new Date()


/**
 * ========================================================
 * Kriteria 1: Memanipulasi DOM untuk Form dan Daftar Transaksi
 * ========================================================
 */
// TODO [Basic] Ambil elemen kontainer incomeList dan expenseList dari DOM

/**
 * TODO [Basic]:
 * Buat fungsi untuk menampilkan (render) semua transaksi ke layar:
 *  - Kosongkan kontainer terlebih dahulu sebelum mengisi ulang
 *  - Gunakan perulangan, buat setiap elemen kartu dengan document.createElement()
 *  - Pastikan setiap elemen memiliki atribut data-testid yang sesuai (lihat panduan di rubrik)
 *  - Masukkan kartu ke kontainer yang tepat: income → incomeList, expense → expenseList
 */

// TODO [Basic] Tambahkan event listener 'submit' pada form, panggil e.preventDefault() di dalamnya
// TODO [Basic] Di dalam handler submit, ambil nilai input lalu tambahkan sebagai objek transaksi baru ke array

/**
 * TODO [Skilled]:
 * Tambahkan validasi input sebelum menyimpan data:
 *  - Tampilkan alert() dan hentikan proses jika judul kosong
 *  - Tampilkan alert() dan hentikan proses jika nominal kurang dari 1
 */

/**
 * TODO [Advanced]:
 * Setiap kali data transaksi berubah, perbarui Panel Dasbor:
 *  - Hitung total pemasukan, total pengeluaran, dan saldo (pemasukan - pengeluaran)
 *  - Tampilkan hasilnya ke elemen yang sesuai di HTML
 */


/**
 * ========================================================
 * Kriteria 2: Mengelola Penyimpanan Data (Web Storage API)
 * ========================================================
 */
/**
 * TODO [Basic]:
 * Data transaksi disimpan ke localStorage menggunakan JSON.stringify(), dan dimuat kembali saat halaman dibuka menggunakan JSON.parse().
 *  - Tombol "Hapus" berfungsi: transaksi yang dihapus langsung hilang dari layar dan dari localStorage.
 */

/**
 * TODO [Skilled]:
 * Tombol "Edit" berfungsi: saat ditekan, formulir (#transactionForm) secara otomatis terisi dengan data transaksi yang dipilih.
 *  - Pengguna dapat mengubah data lalu menyimpan perubahan.
 *  - Formulir kembali ke mode "Tambah" setelah pembaruan selesai.
 */

/**
 * TODO [Advanced]:
 * Gunakan Custom Event sebagai penghubung antara perubahan data dan pembaruan tampilan:
 *  - Kirim sinyal dengan document.dispatchEvent(new Event('transaction:updated')) setiap kali data berubah
 *  - Pasang satu listener untuk event tersebut yang memanggil fungsi render dan update dasbor
 */


/**
 * ========================================================
 * Kriteria 3: Fitur Interaktif (Pindah Kategori dan Pencarian)
 * ========================================================
 */
/**
 * TODO [Basic]:
 * Tambahkan tombol "Ubah Tipe" pada setiap kartu transaksi:
 *  - Saat diklik, ubah tipe transaksi: 'income' → 'expense' atau 'expense' → 'income'
 *  - Simpan perubahan ke localStorage dan perbarui tampilan
 */

/**
 * TODO [Skilled]:
 * Tambahkan event listener 'input' pada kolom pencarian:
 *  - Filter array transaksi berdasarkan kecocokan kata kunci dengan judul transaksi
 *  - Tampilkan hanya transaksi yang judulnya mengandung kata kunci tersebut
 */

/**
 * TODO [Advanced]:
 * Pastikan fitur pencarian berjalan dengan baik di semua kondisi:
 *  - Saat kolom pencarian dikosongkan, tampilkan kembali seluruh daftar transaksi
 */

let transaksi = [];

function generateId() {
    return +new Date();
}

const incomeList = document.getElementById('incomeList');
const expenseList = document.getElementById('expenseList');

// Ambil elemen summary dari DOM
const balanceAmount = document.querySelector('.tracker-summary__balance-amount');
const incomeAmount = document.querySelector('.tracker-summary__stat-amount--income');
const expenseAmount = document.querySelector('.tracker-summary__stat-amount--expense');

/**
 * Fungsi untuk menghitung dan memperbarui ringkasan keuangan
 */
function updateSummary() {
    let totalIncome = 0;
    let totalExpense = 0;

    transaksi.forEach(transaction => {
        if (transaction.type === 'income') {
            totalIncome += transaction.amount;
        } else {
            totalExpense += transaction.amount;
        }
    });

    const balance = totalIncome - totalExpense;

    // Perbarui tampilan dengan angka yang diformat
    balanceAmount.textContent = `Rp ${balance.toLocaleString('id-ID')}`;
    incomeAmount.textContent = `Rp ${totalIncome.toLocaleString('id-ID')}`;
    expenseAmount.textContent = `Rp ${totalExpense.toLocaleString('id-ID')}`;
}

function renderTransactions() {
    incomeList.innerHTML = '';
    expenseList.innerHTML = '';

    transaksi.forEach(transaction => {
        const card = document.createElement('div');
        card.className = 'transaction-card';
        card.setAttribute('data-testid', 'transactionItem');

        const title = document.createElement('h3');
        title.textContent = transaction.title;
        title.setAttribute('data-testid', 'transactionItemTitle');

        const amount = document.createElement('p');
        amount.textContent = `Rp ${transaction.amount.toLocaleString('id-ID')}`;
        amount.setAttribute('data-testid', 'transactionItemAmount');

        const date = document.createElement('p');
        date.textContent = transaction.date || '-';
        date.setAttribute('data-testid', 'transactionItemDate');

        const type = document.createElement('p');
        type.textContent = transaction.type === 'income' ? 'Pemasukan' : 'Pengeluaran';
        type.setAttribute('data-testid', 'transactionItemType');

        // Tombol Ubah Tipe
        const editTypeBtn = document.createElement('button');
        editTypeBtn.textContent = 'Ubah Tipe';
        editTypeBtn.setAttribute('data-testid', 'transactionItemEditTypeButton');
        editTypeBtn.className = 'transaction-btn transaction-btn--change-type';
        editTypeBtn.addEventListener('click', () => changeTransactionType(transaction.id));

        // Tombol Edit
        const editBtn = document.createElement('button');
        editBtn.textContent = 'Edit';
        editBtn.className = 'transaction-btn transaction-btn--edit';
        editBtn.addEventListener('click', () => editTransaction(transaction.id));

        // Tombol Hapus
        const deleteBtn = document.createElement('button');
        deleteBtn.textContent = 'Hapus';
        deleteBtn.setAttribute('data-testid', 'transactionItemDeleteButton');
        deleteBtn.className = 'transaction-btn transaction-btn--delete';
        deleteBtn.addEventListener('click', () => deleteTransaction(transaction.id));

        const buttonContainer = document.createElement('div');
        buttonContainer.className = 'transaction-buttons';
        buttonContainer.appendChild(editTypeBtn);
        buttonContainer.appendChild(editBtn);
        buttonContainer.appendChild(deleteBtn);

        card.appendChild(title);
        card.appendChild(amount);
        card.appendChild(date);
        card.appendChild(type);
        card.appendChild(buttonContainer);

        if (transaction.type === 'income') {
            incomeList.appendChild(card);
        } else {
            expenseList.appendChild(card);
        }
    });
}

const transactionForm = document.getElementById('transactionForm');
let editingTransactionId = null;

/**
 * Fungsi untuk mengedit transaksi
 */
function editTransaction(id) {
    const transaction = transaksi.find(t => t.id === id);
    if (transaction) {
        const titleInput = document.getElementById('transactionFormTitleInput');
        const amountInput = document.getElementById('transactionFormAmountInput');
        const dateInput = document.getElementById('transactionFormDateInput');
        const typeSelect = document.getElementById('transactionFormTypeSelect');

        titleInput.value = transaction.title;
        amountInput.value = transaction.amount;
        dateInput.value = transaction.date || '';
        typeSelect.value = transaction.type;

        editingTransactionId = id;
        
        // Ubah label form untuk menunjukkan mode edit
        const formHeading = document.querySelector('.tracker-form-section__heading');
        formHeading.textContent = 'Edit Pencatatan';
    }
}

/**
 * Fungsi untuk menghapus transaksi
 */
function deleteTransaction(id) {
    if (confirm('Apakah Anda yakin ingin menghapus transaksi ini?')) {
        transaksi = transaksi.filter(t => t.id !== id);
        localStorage.setItem('transactions', JSON.stringify(transaksi));
        renderTransactions();
        updateSummary();
    }
}

/**
 * Fungsi untuk mengubah tipe transaksi
 */
function changeTransactionType(id) {
    const transaction = transaksi.find(t => t.id === id);
    if (transaction) {
        transaction.type = transaction.type === 'income' ? 'expense' : 'income';
        localStorage.setItem('transactions', JSON.stringify(transaksi));
        renderTransactions();
        updateSummary();
    }
}

transactionForm.addEventListener('submit', function(e) {
    e.preventDefault();

    const titleInput = document.getElementById('transactionFormTitleInput');
    const amountInput = document.getElementById('transactionFormAmountInput');
    const dateInput = document.getElementById('transactionFormDateInput');
    const typeSelect = document.getElementById('transactionFormTypeSelect');

    const title = titleInput.value.trim();
    const amount = parseInt(amountInput.value);
    const date = dateInput.value;
    const type = typeSelect.value;

    if (title === '') {
        alert('Judul tidak boleh kosong!');
        return;
    }

    if (isNaN(amount) || amount < 1) {
        alert('Nominal harus lebih dari 0!');
        return;
    }

    if (editingTransactionId !== null) {
        // Mode edit: perbarui transaksi yang ada
        const transaction = transaksi.find(t => t.id === editingTransactionId);
        if (transaction) {
            transaction.title = title;
            transaction.amount = amount;
            transaction.date = date;
            transaction.type = type;
        }
        
        editingTransactionId = null;
        const formHeading = document.querySelector('.tracker-form-section__heading');
        formHeading.textContent = 'Tambah Pencatatan Baru';
    } else {
        // Mode tambah: tambahkan transaksi baru
        const transaksibaru = {
            id: generateId(),
            title: title,
            amount: amount,
            type: type,
            date: date
        };
        transaksi.push(transaksibaru);
    }

    localStorage.setItem('transactions', JSON.stringify(transaksi));
    renderTransactions();
    updateSummary();

    titleInput.value = '';
    amountInput.value = '';
    dateInput.value = '';
    typeSelect.value = 'income';
});

window.addEventListener('load', function() {
    const storedTransactions = localStorage.getItem('transactions');
    if (storedTransactions) {
        transaksi = JSON.parse(storedTransactions);
        renderTransactions();
        updateSummary();
    }
});

const searchtransactionform = document.getElementById('searchTransactionForm');
const searchInput = document.getElementById('searchTransactionFormTitleInput');

searchInput.addEventListener('input', function(e) {
    const keyword = e.target.value.toLowerCase();
    
    if (keyword === '') {
        // Jika pencarian kosong, tampilkan semua transaksi
        renderTransactions();
    } else {
        // Filter dan tampilkan transaksi yang sesuai
        const filteredTransactions = transaksi.filter(transaction => 
            transaction.title.toLowerCase().includes(keyword)
        );
        renderFilteredTransactions(filteredTransactions);
    }
});

function renderFilteredTransactions(filteredTransactions) {
    incomeList.innerHTML = '';
    expenseList.innerHTML = '';

    filteredTransactions.forEach(transaction => {
        const card = document.createElement('div');
        card.className = 'transaction-card';
        card.setAttribute('data-testid', 'transactionItem');

        const title = document.createElement('h3');
        title.textContent = transaction.title;
        title.setAttribute('data-testid', 'transactionItemTitle');

        const amount = document.createElement('p');
        amount.textContent = `Rp ${transaction.amount.toLocaleString('id-ID')}`;
        amount.setAttribute('data-testid', 'transactionItemAmount');

        const date = document.createElement('p');
        date.textContent = transaction.date || '-';
        date.setAttribute('data-testid', 'transactionItemDate');

        const type = document.createElement('p');
        type.textContent = transaction.type === 'income' ? 'Pemasukan' : 'Pengeluaran';
        type.setAttribute('data-testid', 'transactionItemType');

        // Tombol Ubah Tipe
        const editTypeBtn = document.createElement('button');
        editTypeBtn.textContent = 'Ubah Tipe';
        editTypeBtn.setAttribute('data-testid', 'transactionItemEditTypeButton');
        editTypeBtn.className = 'transaction-btn transaction-btn--change-type';
        editTypeBtn.addEventListener('click', () => changeTransactionType(transaction.id));

        // Tombol Edit
        const editBtn = document.createElement('button');
        editBtn.textContent = 'Edit';
        editBtn.className = 'transaction-btn transaction-btn--edit';
        editBtn.addEventListener('click', () => editTransaction(transaction.id));

        // Tombol Hapus
        const deleteBtn = document.createElement('button');
        deleteBtn.textContent = 'Hapus';
        deleteBtn.setAttribute('data-testid', 'transactionItemDeleteButton');
        deleteBtn.className = 'transaction-btn transaction-btn--delete';
        deleteBtn.addEventListener('click', () => deleteTransaction(transaction.id));

        const buttonContainer = document.createElement('div');
        buttonContainer.className = 'transaction-buttons';
        buttonContainer.appendChild(editTypeBtn);
        buttonContainer.appendChild(editBtn);
        buttonContainer.appendChild(deleteBtn);

        card.appendChild(title);
        card.appendChild(amount);
        card.appendChild(date);
        card.appendChild(type);
        card.appendChild(buttonContainer);

        if (transaction.type === 'income') {
            incomeList.appendChild(card);
        } else {
            expenseList.appendChild(card);
        }
    });
}