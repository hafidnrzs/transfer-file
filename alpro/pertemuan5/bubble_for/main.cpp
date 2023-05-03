#include<iostream>
using namespace std;

void BubbleSort(int[],int);

int main() {
	int arr[] = {3,2,4,1,5};
	int size;
	size = sizeof(arr) / sizeof(arr[0]);
	BubbleSort(arr, size);
	return 0;
}

void BubbleSort(int A[], int s) {
	int i, j, temp;
	cout << "Unsorted Array: " << endl;
	for (i = 0; i < s; i++) {
		cout << A[i] << " ";
	}
	cout << "\n\n";

	//implementasi bubble sort
	for (j = 0; j < s; j++) {
		cout << "Loop ke-" << j + 1 << endl;
		for (i = 0; i < s - 1; i++) {
			if (A[i] > A[i + 1]) {
				//tukar elemen
				temp = A[i + 1];
				A[i + 1] = A[i];
				A[i] = temp;
				cout << A[i] << " tukar dengan " << A[i + 1] << endl;
			}
		}
		for (int k = 0; k < s; k++) {
			cout << A[k] << " ";
		}
		cout << "\n\n";
	}

	cout << "\nSorted Array: " << endl;
	for (i = 0; i < s; i++) {
		cout << A[i] << " ";
	}
}