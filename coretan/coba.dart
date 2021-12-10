void main() {
  print("Hello World");
  double phi = 3.14;

  dynamic a = 34;

  print(a as int);

  print(phi is double);
  print(phi is! double);

  var c = (a, b) => a + b;
  final d = c(3, 4);
  print(d);

  const guru = "Nanda";
  // guru = "mela"; // error

  print(guru);
}
