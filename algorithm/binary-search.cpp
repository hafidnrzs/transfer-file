#include <iostream>
using namespace std;

int BinarySearch(int[], int, int);

int main() {
    int array[] = {1,2,3,4,5};
    int size = sizeof(array) / sizeof(array[0]);
    int key, position;

    cout << "Input cari: "; cin >> key;
    position = BinarySearch(array, size, key);
    if (position == -1) {
        cout << "Elemen dicari tidak ketemu" << endl;
    } else {
        cout << "Elemen yang dicari ada di indeks ke-" << position << endl;
    }
    return 0;
}

int BinarySearch(int array[], int size, int key) {
    int left, right, middle;
    left = 0;
    right = size - 1;
    while (left <= right) {
        middle = (left + right) / 2;
        if (key == array[middle])
            return middle;
        else if (key < array[middle])
            right = middle - 1;
        else
            left = middle + 1;
    }
    return -1;
}