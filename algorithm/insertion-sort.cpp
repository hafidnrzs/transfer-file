#include <iostream>
using namespace std;

void InsertionSort(int[], int);
void printArray(int[], int);

int main() {
    int arr[] = {3,2,4,1,5};
	int size = sizeof(arr) / sizeof(arr[0]);
    cout << "Unsorted array:" << endl;
    printArray(arr, size);
	InsertionSort(arr, size);

    cout << "\nSorted array:" << endl;
    printArray(arr, size);
	return 0;
}

void InsertionSort(int arr[], int n)
{
    int i, key, j;
    for (i = 1; i < n; i++)
    {
        key = arr[i];
        j = i - 1;
 
        // Move elements of arr[0..i-1], 
        // that are greater than key, to one
        // position ahead of their
        // current position
        while (j >= 0 && arr[j] > key)
        {
            arr[j + 1] = arr[j];
            j = j - 1;
        }
        arr[j + 1] = key;
    }
}

void printArray(int array[], int size) {
    int i;
    for (i = 0; i < size; i++) {
        cout << array[i] << " ";
    }
}