#include <iostream>
using namespace std;

void BubbleSort(int[], int);
void printArray(int[], int);

int main() {
    int arr[] = {3,2,4,1,5};
	int size = sizeof(arr) / sizeof(arr[0]);
    cout << "Unsorted array:" << endl;
    printArray(arr, size);
	BubbleSort(arr, size);

    cout << "\nSorted array:" << endl;
    printArray(arr, size);
	return 0;
}

void BubbleSort(int array[], int size) {
    int i, j, temp;
    for (i = 0; i < size - 1; i++) {
        for (j = 0; j < size - 1; j++) {
            if (array[j] > array[j + 1]) {
                temp = array[j + 1];
                array[j + 1] = array[j];
                array[j] = temp;
            }
        }
    }
}

void printArray(int array[], int size) {
    int i;
    for (i = 0; i < size; i++) {
        cout << array[i] << " ";
    }
}