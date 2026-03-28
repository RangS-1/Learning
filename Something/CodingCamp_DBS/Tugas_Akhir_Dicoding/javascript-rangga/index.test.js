import { test } from 'node:test';
import assert from 'node:assert';
import { tambah, kurang, kali, bagi} from './index.mjs';
/*
    Ini adalah komentar
*/
// Ini juga komentar

test('Should correctly add two numbers', () => {
    const angka1 = 5;
    const angka2 = 10;

    const hasil = tambah(angka1, angka2);

    const expectedhasil = 15;
    assert.equal(hasil, expectedhasil);
});

test('Should correctly subtract two numbers', () => {
    const angka1 = 10;
    const angka2 = 5;

    const hasil = kurang(angka1, angka2);

    const expectedhasil = 5;
    assert.equal(hasil, expectedhasil);
});

test('Should correctly multiply two numbers', () => {
    const angka1 = 5;
    const angka2 = 10;

    const hasil = kali(angka1, angka2);

    const expectedhasil = 50;
    assert.equal(hasil, expectedhasil);
});

test('Should correctly divide two numbers', () => {
    const angka1 = 10;
    const angka2 = 5;

    const hasil = bagi(angka1, angka2);

    const expectedhasil = 2;
    assert.equal(hasil, expectedhasil);
});

/* 
Output:
✔ Should correctly add two numbers (1.4231ms)
✔ Should correctly subtract two numbers (0.2832ms)
✔ Should correctly multiply two numbers (0.2428ms)
✔ Should correctly divide two numbers (0.2138ms)
ℹ tests 4
ℹ suites 0
ℹ pass 4
ℹ fail 0
ℹ cancelled 0
ℹ skipped 0
ℹ todo 0
ℹ duration_ms 167.8824
*/