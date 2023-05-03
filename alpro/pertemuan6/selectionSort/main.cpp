#include<iostream>
using namespace std;

void SelectionSort(int[], int);

int main() {
	int arr[] = {3,2,4,1,6};
	int size = sizeof(arr) / sizeof(arr[0]);
	SelectionSort(arr, size);
	return 0;
}

// Selection sort, menukar elemen pertama dengan elemen terkecil

void SelectionSort(int A[], int s) {
	int i, j, temp, kecil;

	cout << "\nUnsorted array: \n";
	for (i = 0; i < s; i++) {
		cout << A[i] << " ";
	}
	cout << "\n";

	for (i = 0; i < s - 1; i++) {
		kecil = i;
		for (j = i + 1; j < s; j++) {
			if (A[kecil] > A[j]) {
				kecil = j;
				
			}
		}
		temp = A[kecil];
		A[kecil] = A[i];
		A[i] = temp; 
	}
	cout << "\nSorted array: \n";
	for (i = 0; i < s; i++) {
		cout << A[i] << " ";
	}
}