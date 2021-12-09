using System;

namespace Opdracht1
{
    class Opdracht1
    {
        static void Main(string[] args)
        {
            Console.Write("Typ een getal in: ");
            var getal1 = Console.ReadLine();
            Console.Write("Typ een tweede getal in: ");
            var getal2 = Console.ReadLine();
            Getallezen(getal1, getal2);
        }

        static void Getallezen(string getal1, string getal2)
        {
            try
            {
                int a = Int32.Parse(getal1);
                int b = Int32.Parse(getal2);

                Som(a, b);
                Verschil(a, b);
                Product(a, b);
                Console.ReadLine();
            }
            catch (Exception e)
            {
                Console.WriteLine("Voer een getal in! (numeriek)");
                Console.ReadLine();
            }
        }
        static void Som(int a, int b)
        {
            Console.WriteLine($"De som van {a} en {b} = {a + b}");
        }
        static void Verschil(int a, int b)
        {
            Console.WriteLine($"Het verschil van {a} en {b} = {a - b}");
        }
        static void Product(int a, int b)
        {
            Console.WriteLine($"Het product van {a} en {b} = {a * b}");
        }
    }
}
