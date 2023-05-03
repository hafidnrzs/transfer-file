#include <iostream>
using namespace std;

int LinearSearch(int[], int, int);

int main() {
    int array[] = {1,5,6,9,2,8};
    int size = sizeof(array)/sizeof(array[0]);
    int key, position;

    cout << "Input cari: "; cin >> key;
    position = LinearSearch(array, size, key);
    if (position == -1)
        cout << "Elemen dicari tidak ketemu" << endl;
    else
        cout << "Elemen dicari ada di indeks ke-" << position << endl;
    return 0;
}

int LinearSearch(int array[], int size, int key) {
    int i;
    for (i = 0; i < size; i++) {
        if (array[i] == key)
            return i;
    }
    return -1;
}