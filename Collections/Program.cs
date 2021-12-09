using System;
using System.Collections.Generic;


namespace Collections
{
    class Program
    {
        static void Main(string[] args)
        {
            Stack<string> stapel = new Stack<string>();

            VulStack(stapel);
            PrintStack(stapel);
        }



        static void VulStack(Stack<string> stapel)
        {
            Console.Write("Geef waarde nummer 1:");
            var text1 = Console.ReadLine();

            Console.Write("Geef waarde nummer 2:");
            var text2 = Console.ReadLine();

            stapel.Push(text1);
            stapel.Push(text2);
        }

        static void PrintStack(Stack<string> stapel)
        {
            foreach (string text in stapel)
            {
                Console.WriteLine(text);
            }

            Console.Write("Geef een waarde: ");
            var text1 = Console.ReadLine();


            bool heeftWaarde = stapel.Contains(text1);

            if(heeftWaarde)
            {
                string topWaarde = stapel.Peek();

                if (topWaarde == text1)
                {
                    Console.WriteLine(" De Waarde is verwijderd van de Stack.");
                    stapel.Pop();
                }
              else
                {
                    Console.WriteLine("De Waarde zit in de stack.");
                }    
              
            }    

            foreach (string text in stapel)
            {
                Console.WriteLine(text);
            }

            Console.ReadLine();
        }
    }
}
